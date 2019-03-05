import SwiperSlider from '../../../../../../ig_template/Resources/Public/Src/Js/Elements/SwiperSlider';

/**
 * PeriodImageSlider
 */
const PeriodImageSlider = (() => {
	// Constants
	const DATA_KEY = 'ig.period-image-slider';
	const EVENT_KEY = `.${DATA_KEY}`;

	/**
	 * Selector
	 *
	 * @var { Object }
	 */
	const Selector = {
		PERIOD_IMAGE_SLIDER: '.history-period-element-images-slider',
	};

	/**
	 * PeriodImageSlider
	 *
	 * @class
	 * @augments HtmlElement
	 */
	class PeriodImageSlider extends SwiperSlider {
		// Public

		/**
		 * Handles ready event
		 *
		 * @return void
		 */
		onReady() {
			super.onReady();

			this.setOptions({
				slidesPerView: 1,
				grabCursor: true,
				autoHeight: true,
				effect: 'fade',
				pagination: {
					el: this.constructor.Selector.PAGINATION,
					clickable: true
				}
			});

			this._initialize();
		}

		// Private
	}

	return PeriodImageSlider._getElements(Selector.PERIOD_IMAGE_SLIDER, PeriodImageSlider);
})();

export default PeriodImageSlider;
