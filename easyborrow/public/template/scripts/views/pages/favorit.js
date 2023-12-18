import FavoriteItemIdb from '../../data/favorite-item-Idb';
import { createItemCatalogue } from '../templates/template_creator';

const Fav = {
  async render() {
    return `
    <section id ="Favorite_Item">
        <h2>Favorite Items</h2>        
        <div id="items" class = "item_list"> 
        </div>
    </section>
    `;
  },

  async afterRender() {
    const items = await FavoriteItemIdb.getAllItems();
    const ItemsContainer = document.querySelector('#items');

    ItemsContainer.innerHTML = '';

    if (items.length === 0) {
      ItemsContainer.innerHTML = '<p>Tidak ada item favorit</p>';
    } else {
      items.forEach((item) => {
        const itemElement = createItemCatalogue(item);
        ItemsContainer.insertAdjacentHTML('beforeend', itemElement);

        const newItemElement = ItemsContainer.lastElementChild;
        newItemElement.addEventListener('click', () => {
          window.location.href = `#/detail/${item.id}`;
        });
      });
    }
  },

};

export default Fav;
