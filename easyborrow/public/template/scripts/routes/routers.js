import mainPages from '../views/pages/home';
import PagePinjam from '../views/pages/pinjam';
import Detail from '../views/pages/detail';
import Fav from '../views/pages/favorit';

const routes = {
  '/': mainPages, // default page
  '/home': mainPages,
  '/pinjam': PagePinjam,
  '/detail/:id': Detail,
  '/favorit': Fav,
};

export default routes;
