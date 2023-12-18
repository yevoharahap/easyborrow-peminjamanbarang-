const mainPages = {
  async render() {
    return `
    <section id="hero_element">
        <main>
          <img src="../images/heros/heros.jpg">
        </main>
        <aside>
          <h1>EASY BORROW</h1>
          <h2>Kemudahan peminjaman barang apapun dan kapanpun</h2>
          <button id="more"> pelajari selengkapnya >></button>
        </aside>
      </section>
      <section id="ads">
        <p></p>
      </section>
      <section id="fitur">
        <h2> Cari barang yang anda butuhkan dengan cepat dan anti ribet!</h2>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, magnam?</p>
        <p> beberapa contoh barang yang kami sediakan!</p>
        <div class="img_container" id="imageContainer">
          <!-- <div class="show_img">
            <img src ="../images/logo/logo EB.png">
          </div> -->
        </div>
        <p> dan masih banyak barang lainnya!</p>
      </section>
      <section id="strength">
        <h2>Why EasyBorrow?</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero libero voluptatem enim reiciendis, tempore perspiciatis. Expedita dolore ipsum sapiente quas.</p>
        <div class="strength_container">
          <div class="strength_list" >
            <div class="strength_item">
              <img src ="../images/strength/press-button_9490345.png" width="200px" height="200px">
              <h3>Mudah digunakan</h3>
            </div>
            <div class="strength_item">
              <img src ='../images/strength/efisien.png'>
              <h3>Efisien</h3>
            </div>
            <div class="strength_item">
              <img src ='../images/strength/affordable.png'>
              <h3>Terjangkau</h3>
            </div>
            <div class="strength_item">
              <img src ='../images/strength/trusted.png'>
              <h3>Terpercaya</h3>
            </div>
          </div>
        </div>

      </section>

      <section id="joinUs">
        <main>
          <div class="description">
            <img src="../images/logo/logo_bg.png">
            <h2> Ayo Gunakan EasyBorrow Sekarang!</h2>
            <p>mulai meminjam barang</p>
            <button id="pinjam">Go!</button>
          </div>
        </main>
        <aside>
          <h2> What They Say!</h2>
          <div class="web_review">
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, cumque!</p>
            <h3 class="name">-Andreas</h3>
          </div>
          <div class="web_review">
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, cumque!</p>
            <h3 class="name">-Andreas</h3>
          </div>
          <div class="web_review">
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, cumque!</p>
            <h3 class="name">-Andreas</h3>
          </div>
        </aside>
      </section>

      <section class="Contact"> </section>
        `;
  },
  async afterRender() {
    const ads = document.getElementById('ads');
    const moreBtn = document.getElementById('more');
    moreBtn.addEventListener('click', () => {
      ads.scrollIntoView({ behavior: 'smooth' });
    });

    const pinjamBtn = document.getElementById('pinjam');
    pinjamBtn.addEventListener('click', () => {
      window.location.href = '#/pinjam/';
    });
    const imageUrls = [
      '../images/load_image.jpg',
    ];

    const imageNames = [
      'Meja',
      'Kursi',
      'Kayu',
      'Papan Tulis',
    ];

    const imageContainer = document.getElementById('imageContainer');

    for (let i = 0; i < 12; i++) {
      const containerElement = document.createElement('div');
      containerElement.classList.add('container_item');

      const imgElement = document.createElement('img');
      const imageUrl = imageUrls[i % imageUrls.length];
      imgElement.src = imageUrl;
      imgElement.classList.add('show_img');

      containerElement.appendChild(imgElement);

      const nameElement = document.createElement('h3');
      nameElement.textContent = imageNames[i % imageNames.length];
      containerElement.appendChild(nameElement);

      imgElement.style.backgroundImage = `url(${imageUrl})`;

      imageContainer.appendChild(containerElement);
    }
  },
};

export default mainPages;
