//first slider (big)
const firstSlider = new Siema({
	selector: '.first_slider',
	duration: 200,
	easing: 'ease-out',
	perPage: 4,
	startIndex: 0,
	draggable: true,
	multipleDrag: true,
	threshold: 20,
	loop: true,
	rtl: false
});
//second slider (small)
document.querySelector('.next').addEventListener('click', () => firstSlider.next());
document.querySelector('.prev').addEventListener('click', () => firstSlider.prev());

const secondSlider = new Siema({
	selector: '.second_slider',
	duration: 200,
	easing: 'ease-out',
	perPage: 4,
	startIndex: 0,
	draggable: true,
	multipleDrag: true,
	threshold: 20,
	loop: true,
	rtl: false,
	onInit: () => console.log('Just initialized carousel 🥑'),
	onChange: () => console.log('Just changed slide 🥑')
});

document.querySelector('.next_two').addEventListener('click', () => secondSlider.next());
document.querySelector('.prev_two').addEventListener('click', () => secondSlider.prev());
