import API_ENDPOINT from '../globals/api-endpoint';

class FakeStoreSource {
  static async ItemList() {
    try {
      const response = await fetch(API_ENDPOINT.ITEM);
      const responseJson = await response.json();

      return responseJson;
    } catch (error) {
      console.error('Error fetching data:', error);
      return [];
    }
  }

  static async ItemDetail(id) {
    try {
      const response = await fetch(API_ENDPOINT.DETAIL(id));
      const responseJson = await response.json();

      return responseJson;
    } catch (error) {
      console.error('Error fetching data:', error);
      return [];
    }
  }
}

export default FakeStoreSource;
