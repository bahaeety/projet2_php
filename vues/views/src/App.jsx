import './Navbar.css';
import Navbar from './Nav';
import Banner from './Banner';
import PopularBooks from './PopularBooks';
import Categories from './Categories';
import Testimonials from './Testimonials';
import Footer from './Footer';
function App() {
  return (
    <div className="App">
      <Navbar />
      <Banner />
      <PopularBooks />
      <Categories />
      <Testimonials />
      <Footer />
    </div>
  );
}

export default App;
