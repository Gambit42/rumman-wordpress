// Swiper rows, scroll reveal, newsletter thanks.
( () => {
	const toast = document.getElementById( 'toast' );
	const say = ( msg ) => {
		if ( ! toast ) return;
		toast.textContent = msg;
		toast.classList.add( 'on' );
		clearTimeout( say.t );
		say.t = setTimeout( () => toast.classList.remove( 'on' ), 2000 );
	};

	// Collections + pantry rows: Swiper (vendored, enqueued in functions.php) handles drag, momentum and trackpad swipes.
	// Slide widths come from style.css; '3.9%' tracks the old clamp(16px, 3.9vw, 75px) gap as the row resizes.
	const reduceMotion = matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
	document.querySelectorAll( '.h-scroll.swiper' ).forEach( ( el ) => new Swiper( el, {
		slidesPerView: 'auto',
		spaceBetween: el.classList.contains( 'pantry' ) ? 19 : '3.9%',
		grabCursor: true,
		speed: reduceMotion ? 0 : 600,
		mousewheel: { forceToAxis: true },
	} ) );

	// Hero: autoplaying slider; no autoplay for reduced-motion visitors, pauses on hover.
	document.querySelectorAll( '.hero-slider' ).forEach( ( el ) => new Swiper( el, {
		loop: true,
		speed: reduceMotion ? 0 : 900,
		autoplay: ! reduceMotion && { delay: 4000, pauseOnMouseEnter: true, disableOnInteraction: false },
		pagination: { el: el.querySelector( '.swiper-pagination' ), clickable: true },
		grabCursor: true,
	} ) );

	// Scroll reveal (same approach as Evercrest): children of each group rise + fade in once, staggered.
	// Selector mirrors the Motion block in style.css — keep them in sync.
	const io = new IntersectionObserver( ( entries ) => {
		for ( const entry of entries ) {
			if ( ! entry.isIntersecting ) continue;
			entry.target.classList.add( 'is-in' );
			io.unobserve( entry.target );
		}
	}, { rootMargin: '0px 0px -12% 0px' } );
	document.querySelectorAll( 'main > .wp-block-group:not(.swiper), main .wp-block-columns, .cook-grid .wp-block-post-template, .h-scroll .swiper-wrapper, .inset:not(.hero) > .wp-block-cover__inner-container' ).forEach( ( el ) => {
		[ ...el.children ].forEach( ( child, i ) => child.style.setProperty( '--rm-i', i ) );
		io.observe( el );
	} );

	// ponytail: no mailing-list backend; wire to a real provider before launch.
	document.querySelectorAll( '.js-newsletter' ).forEach( ( f ) => f.addEventListener( 'submit', ( e ) => {
		e.preventDefault();
		f.reset();
		say( 'Subscribed — see you Friday' );
	} ) );
} )();

// Back-to-top button: appears once the page has scrolled a screen down.
( ( b ) => b && addEventListener( 'scroll', () => b.classList.toggle( 'is-shown', scrollY > innerHeight ), { passive: true } ) )( document.querySelector( '.to-top' ) );
