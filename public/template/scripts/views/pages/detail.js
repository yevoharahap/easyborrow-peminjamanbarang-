/* eslint-disable no-alert */
import UrlParser from '../../routes/url-parser';
import FakeStoreSource from '../../data/fakestore-source';
import { createDetailItem } from '../templates/template_creator';
import { shareLink } from '../../utils/share-link';
import LikeButtonInitiator from '../../utils/like-button';

const Detail = {
  async render() {
    return `
      <div id="Item_Detail"></div>
    `;
  },

  async afterRender() {
    const url = UrlParser.parseActiveUrlWithoutCombiner();
    const item = await FakeStoreSource.ItemDetail(url.id);
    const ItemContainer = document.querySelector('#Item_Detail');
    ItemContainer.innerHTML = createDetailItem(item);

    const shareButton = document.querySelector('.share-button');
    shareButton.addEventListener('click', shareLink);

    LikeButtonInitiator.init({
      likeButtonContainer: document.querySelector('.like-button'),
      item: {
        id: item.id,
        title: item.title,
        image: item.image,
      },
    });
  },
};

export default Detail;
