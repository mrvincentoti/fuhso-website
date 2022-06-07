<label for="course_id">DEPARTMENT</label>
<?= $this->Form->input('course_id', 
    array('empty'=>'Select department','type'=>'select', 'label'=>false, 'options'=>$departments,'class'=>'form-control')
)?>