// Testimonials.jsx
import React from 'react';
import { useSprings, animated } from '@react-spring/web';
import { useInView } from 'react-intersection-observer';
import './Testimonials.css';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faStar } from '@fortawesome/free-solid-svg-icons';

const Testimonials = () => {
  const reviews = [
    { name: 'Alice Johnson', imageUrl: '/path-to-profile1.jpg', rating: 5, text: 'Fantastic collection of books!' },
    { name: 'Mark Thompson', imageUrl: '/path-to-profile2.jpg', rating: 4, text: 'Great customer service.' },
    { name: 'Sophie Lee', imageUrl: '/path-to-profile3.jpg', rating: 5, text: 'Love the variety in genres!' },
  ];

  const [ref, inView] = useInView({
    triggerOnce: true,
    threshold: 0.3, 
  });

  const springs = useSprings(
    reviews.length,
    reviews.map((_, index) => ({
      from: { opacity: 0, transform: 'translateY(20px)' },
      to: { opacity: inView ? 1 : 0, transform: inView ? 'translateY(0)' : 'translateY(20px)' },
      delay: index * 200,
      config: { tension: 180, friction: 12 },
    }))
  );

  return (
    <section className="testimonials" ref={ref}>
      <h3>What Our Customers Say</h3>
      <div className="testimonials-list">
        {springs.map((springStyle, index) => (
          <animated.div style={springStyle} className="testimonial-card" key={index}>
            <img src={reviews[index].imageUrl} alt={reviews[index].name} className="profile-pic" />
            <h4>{reviews[index].name}</h4>
            <div className="rating">
              {[...Array(reviews[index].rating)].map((_, i) => (
                <FontAwesomeIcon icon={faStar} key={i} />
              ))}
            </div>
            <p>{reviews[index].text}</p>
          </animated.div>
        ))}
      </div>
    </section>
  );
};

export default Testimonials;
