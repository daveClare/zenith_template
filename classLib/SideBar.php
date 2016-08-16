<?php
namespace LIB;
/*
	* Side bar content blocks.
	* Call a complete side bar with (new HTML_SideBar)->Complete( [] );
	* Or individual components.
	* $conditions in Complete() see method for details
*/



class SideBar {
	public $html = '';
	protected $progressBar = 1;
	protected $fscsProtectedAmount = '75000';
	protected $fscs_image = ['bp_banner_3.jpg', 'FSCS_square.jpg'];

/****							****************************************************************************/

	public function __construct($conditions = []){
		if(!empty($conditions)){
			foreach($conditions as $condition => $value){
				$this->{$condition} = $value;
			}
		}
	}

/****	Complete sidebar		****************************************************************************/
	
	public function Complete(){

		$this->html .= $this->ProgressBar($this->progressBar);
		$this->html .= $this->fscs_banner($this->fscsProtectedAmount);
		$this->html .= $this->save_for_later();

		return $this->html;
	}

/****	FSCS Banner				****************************************************************************/

	public function fscs_banner($fscsProtectedAmount = null){
		$this->fscsProtectedAmount = ( $fscsProtectedAmount == null ? $this->fscsProtectedAmount : $fscsProtectedAmount);
		ob_start();
		?>

		<div class="">

			<a href="#" onclick="fscsModal( ); return false;"><img src="img/<?=$this->fscs_image[0]?>" class="img-responsive" /></a>
			<h3 class="text-center">Your Money Is Protected</h3>
			<p>All the money you hold with us is protected up to &pound;<?=number_format($this->fscsProtectedAmount)?> per applicant.</p>
		</div><!-- ./ row -->

		<?php
		$html = ob_get_contents();
		ob_end_clean();

		return $html;

	}

/****	Save Application for later button	****************************************************************************/

	public function save_for_later(){
		ob_start();
		?>

			<br/><br/>
			<button type="submit" class="btn btn-info btn-block" onClick="saveModal( ); return false;">Save Your Application For Later</button>
			<br/><br/>

		<?php
		$html = ob_get_contents();
		ob_end_clean();

		return $html;

	}
/****	Vertical Progress bar	****************************************************************************/
/*
 *	$stage is the step number set as active
 * Later on we can add some JS function to apply the 'active' class
*/
	public function ProgressBar( $stage = null ){

		$stage = ($stage != null ? $stage : 1);

		$stages = [ 1 => 'Basic details', 2 => 'Customer infomation', 3 => 'Your bank details', 4 => 'Summary', 5 => 'Your application' ];

		ob_start();
		?>

		<!-- PROGRESS BAR - both progress counters work in the exact same way, to increase/decrease the amount of steps within the progress bar, change steps-4 to your required amount ,e.g. steps-6, default on-1 indicates the first step is highlighted, when submitting the form change on-1 to the next iteration, this progress bar supports upto 8 steps to increase this limit edit partials/global_form.less changing the value within the .generate-steps loop -->

		<!-- DESKTOP PROGRESS - vertical step counter for desktop, with step labels -->

		<div class="progress--desktop">
		<h3>Application Progress</h3>
			<ul class="progress_bar--desktop on-<?=$stage?> steps-<?=count($stages)?>">
			<?php
				foreach($stages as $st => $text){

					echo '<li '. ( $st <= $stage ? 'class="active"' : '' ) .' >'.PHP_EOL;
						echo '<span>'.$st.'</span>'.PHP_EOL;
						echo '<strong>'.$text.'</strong>'.PHP_EOL;
					echo '</li >'.PHP_EOL;

				}
			?>
			</ul>
					
		</div>


		<?php
		$html = ob_get_contents();
		ob_end_clean();

		return $html;
	}

/****				****************************************************************************/		
/****	./ Class	****************************************************************************/
}