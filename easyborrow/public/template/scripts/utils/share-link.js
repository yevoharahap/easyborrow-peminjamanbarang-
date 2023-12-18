/* eslint-disable import/prefer-default-export */
/* eslint-disable no-alert */
const shareLink = () => {
  const shareUrl = window.location.href;
  if (navigator.share) {
    navigator.share({
      title: document.title,
      url: shareUrl,
    })
      .then(() => console.log('Berbagi berhasil'))
      .catch((error) => console.error('Error sharing:', error));
  } else {
    alert(`Klik kanan pada tombol dan pilih "Salin tautan" untuk berbagi: ${shareUrl}`);
  }
};

export { shareLink };
