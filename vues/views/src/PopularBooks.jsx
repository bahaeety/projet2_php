// PopularBooks.jsx
import React from 'react';
import { useSprings, animated } from '@react-spring/web';
import './PopularBooks.css';

const PopularBooks = () => {
  const books = [
    { title: 'Book Title 1', author: 'Author 1', imageUrl: '/path-to-image1.jpg' },
    { title: 'Book Title 2', author: 'Author 2', imageUrl: '/path-to-image2.jpg' },
    { title: 'Book Title 3', author: 'Author 3', imageUrl: '/path-to-image3.jpg' },
  ];

  // Using useSprings to animate each book card
  const springs = useSprings(
    books.length,
    books.map((_, index) => ({
      from: { opacity: 0, transform: 'translateY(20px)' },
      to: { opacity: 1, transform: 'translateY(0)' },
      delay: index * 150,
    }))
  );

  return (
    <section className="popular-books">
      <h3>Popular Books</h3>
      <div className="books-list">
        {springs.map((springStyle, index) => (
          <animated.div style={springStyle} className="book-card" key={index}>
            <img src={books[index].imageUrl} alt={books[index].title} />
            <h4>{books[index].title}</h4>
            <p>{books[index].author}</p>
          </animated.div>
        ))}
      </div>
    </section>
  );
};

export default PopularBooks;
