<label for="position_id">POSITION APPLIED FOR</label>
<?php 
    echo $this->Form->control('position_id', ['class'=>'form-control list-dt','data-error'=>"othername required", 
        'required'=>false, 'label'=>false, 'placeholder'=>'','options'=>$positions, 'empty'=>'Select Position'
        ]);
?>