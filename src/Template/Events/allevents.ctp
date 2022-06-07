<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="page-title">Events</h2>
              <!--p> Tables with built-in bootstrap styles </p-->
              <div class="row">
                <!-- Bordered table -->
                <div class="col-md-12 my-4">
                  <div class="card shadow">
                    <div class="card-body">
                      <h5 class="card-title">All Events</h5>
                     
                      <table class="table table-bordered table-hover mb-0">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Venue</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php 
                             $count = 0; 
                             foreach($events as $event):
                             $count += 1;
                         ?>
                          <tr>
                            <td><?=$count?></td>
                            <td><?=$event->title?></td>
                            <td>
                                <img src="<?=BASE_URL?>/img/<?=$event->image?>" style="width:50px;"/>
                            </td>
                            <td><?=date('M d, Y', strtotime($event->date))?></td>
                            <td><?=date('H:m A', strtotime($event->time))?></td>
                            <td><?=$event->venue?></td>
                            <td class="text-center">
                                <!--?= $this->Html->link(__('VIEW'), ['action' => 'view', $event->id]) ?-->
                                <?= $this->Html->link(__('EDIT'), ['action' => 'edit', $event->id]) ?> |
                                <?= $this->Form->postLink(__('DELETE'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
                            </td>
                          </tr>
                         <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div> <!-- Bordered table -->
              </div> <!-- end section -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->