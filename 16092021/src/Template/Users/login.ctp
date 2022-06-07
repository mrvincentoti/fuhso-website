<div class="wrapper vh-100">
  <div class="row align-items-center h-100" style="margin-right: 1px ; margin-left: 1px;">
    <!--form class="col-lg-3 col-md-4 col-10 mx-auto text-center"-->
    <?= $this->Form->create($user, ['class'=>'col-lg-3 col-md-4 col-10 mx-auto text-center']) ?>
      <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./">
        <?=$this->Html->image('logo.jpg',['style'=>'width: 100px'])?>
      </a>
      <h1 class="h6 mb-3">Sign in</h1>
      <div class="form-group">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="inputEmail" name="username" class="form-control form-control-lg" placeholder="Email address" required="" autofocus="">
      </div>
      <div class="form-group">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control form-control-lg" placeholder="Password" required="">
      </div>
      <!--div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Stay logged in </label>
      </div-->
      <!--button class="btn btn-lg btn-fuhso btn-block" type="submit">Let me in</button-->
      <?= $this->Form->button(__('Let me in'),['class'=>'btn btn-lg btn-fuhso btn-block']) ?>
      <p class="mt-5 mb-3 text-muted">© 2020</p>
    <?= $this->Form->end() ?>
  </div>
</div>