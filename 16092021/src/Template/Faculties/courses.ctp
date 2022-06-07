<label for="course">Course Applied For</label>
<!--?= $this->Form->input('lga_id', 
    array('type'=>'select', 'label'=>false, 'options'=>$lgas,'class'=>'form-control')
)?-->

<?= $this->Form->input('course_id', 
  array('type'=>'select', 'label'=>false, 'options'=>$courses,'class'=>'form-control', 'empty'=>'Choose..')
)?>