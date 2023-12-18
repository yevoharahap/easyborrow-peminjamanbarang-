import CONFIG from './config';

const API_ENDPOINT = {
  ITEM: `${CONFIG.BASE_URL}products`,
  DETAIL: (id) => `${CONFIG.BASE_URL}products/${id}`,
};

export default API_ENDPOINT;
