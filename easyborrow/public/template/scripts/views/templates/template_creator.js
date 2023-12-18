/* eslint-disable import/prefer-default-export */
// import CONFIG from '../../globals/config';

const createItemCatalogue = (item) => `
    <div class="item" tabindex="0">
        <p class="category">kategori: ${item.category}</p>
        <img src="${item.image}" alt="Gambar ${item.title}">
        <div class="item_name_container">
            <h2 class="item_name">${item.title}</h2>
        </div>
    </div>
`;
// eslint-disable-next-line no-unused-vars
const createDetailItem = (item) => `
<div class ="item_detail_box">
    <div class="item_detail">
        <main>
            <img src="${item.image}" alt="Gambar ${item.title}">
        </main>
        <aside> 
            <div class ="detail_title">${item.title}</div>
            <div class ="detail_desc"> 
                ${item.description}
            </div>
            <div class="share-button">
                <i class="fas fa-share"></i>
            </div>
            <div class="like-button"></div>
            <div class="pinjam-button"> <a>Pinjam Barang</a> </div>
        </aside>
    </div>
</div>
`;

const createLikeButtonTemplate = () => `
  <button aria-label="like this item" id="likeButton" class="like">
     <i class="fa fa-heart-o" aria-hidden="true"></i>
  </button>
`;

const createLikedButtonTemplate = () => `
  <button aria-label="unlike this item" id="likeButton" class="like">
    <i class="fa fa-heart" aria-hidden="true"></i>
  </button>
`;

export {
  createItemCatalogue,
  createDetailItem,
  createLikeButtonTemplate,
  createLikedButtonTemplate,
};
