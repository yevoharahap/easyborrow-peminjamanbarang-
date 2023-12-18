import FavoriteItemIdb from '../data/favorite-item-Idb';
import { createLikeButtonTemplate, createLikedButtonTemplate } from '../views/templates/template_creator';

const LikeButtonInitiator = {
  async init({ likeButtonContainer, item }) {
    this._likeButtonContainer = likeButtonContainer;
    this._item = item;

    await this._renderButton();
  },

  async _renderButton() {
    const { id } = this._item;

    if (await this._isItemExist(id)) {
      this._renderLiked();
    } else {
      this._renderLike();
    }
  },

  async _isItemExist(id) {
    const item = await FavoriteItemIdb.getItem(id);
    return !!item;
  },

  _renderLike() {
    this._likeButtonContainer.innerHTML = createLikeButtonTemplate();

    const likeButton = document.querySelector('#likeButton');
    likeButton.addEventListener('click', async () => {
      await FavoriteItemIdb.putItem(this._item);
      this._renderButton();
    });
  },

  _renderLiked() {
    this._likeButtonContainer.innerHTML = createLikedButtonTemplate();

    const likeButton = document.querySelector('#likeButton');
    likeButton.addEventListener('click', async () => {
      await FavoriteItemIdb.deleteItem(this._item.id);
      this._renderButton();
    });
  },
};

export default LikeButtonInitiator;
