import AbstractController from '../../../../../../ig_template/Resources/Public/Src/Js/Controller/AbstractController';
import Controller from '../../../../../../ig_template/Resources/Public/Src/Js/Controller/Controller';
import PeriodImageSlider from '../Elements/PeriodImageSlider';

/**
 * History Controller
 *
 * @class
 */
class HistoryController extends AbstractController {
	/**
	 * @constructor
	 */
	constructor() {
		super();

		Controller.registerController(this);
		this._registerElements(...PeriodImageSlider);
	}
}

export default (new HistoryController);
