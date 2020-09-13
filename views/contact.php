<?php
/** @var $this \jamielong\phpmvc\View */
/** @var $model \app\models\ContactForm */

use jamielong\phpmvc\form\TextareaField;

$this->title = 'Contact';
?>

<h1>Contact Us</h1>

<?php $form = \jamielong\phpmvc\form\Form::begin('', 'post') ?>
<?php echo $form->field($model, 'subject') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo new TextareaField($model, 'body') ?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php \jamielong\phpmvc\form\Form::end(); ?>