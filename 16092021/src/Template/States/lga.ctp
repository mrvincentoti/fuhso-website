<label for="lga">L.G.A OF ORIGIN</label>
<?= $this->Form->input('lga_id', 
    array('empty'=>'Select LGA','type'=>'select', 'label'=>false, 'options'=>$lgas,'class'=>'form-control list-dt')
)?>