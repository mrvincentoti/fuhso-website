      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="">
              <?=$this->Html->image('logo.jpg',['style'=>'width: 100px'])?>
            </a>
          </div>
          <ul class="navbar-nav flex-fill w-100 mb-2">
             <li class="nav-item w-100">
              <a class="nav-link" href="<?=BASE_URL?>users/admindashboard">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Dashboard</span>
              </a>
            </li>
          </ul>


          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Applicants</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-user fe-16"></i>
                <span class="ml-3 item-text">Applicants</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                <li class="nav-item">
                  <?=
                    $this->Html->link(
                      $this->Html->tag('span','', ['class'=>'ml-1 item-text']). "Sort Applicants",
                      ['controller'=>'employees', 'action'=>'sort'],
                      ['class'=>'nav-link pl-3', 'escape'=> false]
                    );
                  ?>
                </li>
                <li class="nav-item">
                  <?=
                    $this->Html->link(
                      $this->Html->tag('span','', ['class'=>'ml-1 item-text']). "Export data",
                      ['controller'=>'employees', 'action'=>'index'],
                      ['class'=>'nav-link pl-3', 'escape'=> false]
                    );
                  ?>
                </li>
                <!--li class="nav-item">
                  <?=
                    $this->Html->link(
                      $this->Html->tag('span','', ['class'=>'ml-1 item-text']). "New Applicant",
                      ['controller'=>'employees', 'action'=>'add'],
                      ['class'=>'nav-link pl-3', 'escape'=> false]
                    );
                  ?>
                </li-->
              </ul>
            </li>
          </ul>


          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Academics</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <!--li class="nav-item dropdown">
              <a href="#apicalls" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-layers fe-16"></i>
                <span class="ml-3 item-text">Faculty</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="apicalls">
                <li class="nav-item">
                  <?=
                    $this->Html->link(
                      $this->Html->tag('span','', ['class'=>'ml-1 item-text']). "Faculty list",
                      ['controller'=>'applicants', 'action'=>'index'],
                      ['class'=>'nav-link pl-3', 'escape'=> false]
                    );
                  ?>
                </li>
                <li class="nav-item">
                   <?=
                    $this->Html->link(
                      $this->Html->tag('span','', ['class'=>'ml-1 item-text']). "New Faculty",
                      ['controller'=>'applicants', 'action'=>'filter'],
                      ['class'=>'nav-link pl-3', 'escape'=> false]
                    );
                  ?>
                </li>
              </ul>
            </li>
           
            <li class="nav-item dropdown">
              <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-file fe-16"></i>
                <span class="ml-3 item-text">Department</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="forms">
                <li class="nav-item">
                  <a class="nav-link pl-3" href=""><span class="ml-1 item-text">Department list</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href=""><span class="ml-1 item-text">New Department</span></a>
                </li>
              </ul>
            </li-->
            <li class="nav-item dropdown">
              <a href="#pos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-layers fe-16"></i>
                <span class="ml-3 item-text">Position</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="pos">
                <!--li class="nav-item">
                  <?=
                    $this->Html->link(
                      $this->Html->tag('span','', ['class'=>'ml-1 item-text']). "Position Category",
                      ['controller'=>'applicants', 'action'=>'index'],
                      ['class'=>'nav-link pl-3', 'escape'=> false]
                    );
                  ?>
                </li-->
                <li class="nav-item">
                  <!--a class="nav-link pl-3" href="./ui-typograpy.html"><span class="ml-1 item-text">Calls by client</span></a-->
                   <?=
                    $this->Html->link(
                      $this->Html->tag('span','', ['class'=>'ml-1 item-text']). "Position",
                      ['controller'=>'positions', 'action'=>'index'],
                      ['class'=>'nav-link pl-3', 'escape'=> false]
                    );
                  ?>
                </li>
              </ul>
            </li>
          </ul>

          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Management</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="#management" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-user fe-16"></i>
                <span class="ml-3 item-text">Users</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="management">
                <li class="nav-item">
                  <?=
                    $this->Html->link(
                      $this->Html->tag('span','', ['class'=>'ml-1 item-text']). "Users",
                      ['controller'=>'users', 'action'=>'index'],
                      ['class'=>'nav-link pl-3', 'escape'=> false]
                    );
                  ?>
                </li>
                <li class="nav-item">
                  <?=
                      $this->Html->link(
                        $this->Html->tag('span','', ['class'=>'ml-1 item-text']). "Add User",
                        ['controller'=>'users', 'action'=>'add'],
                        ['class'=>'nav-link pl-3', 'escape'=> false]
                      );
                    ?>
                </li>
              </ul>
            </li>
          </ul>

          <p class="text-muted nav-heading mt-4 mb-1">
            <span>CMS</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item dropdown">
              <a href="#teams" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-user fe-16"></i>
                <span class="ml-3 item-text">Team Member</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="teams">
                <li class="nav-item">
                  <?=
                    $this->Html->link(
                      $this->Html->tag('span','', ['class'=>'ml-1 item-text']). "List Members",
                      ['controller'=>'Teams', 'action'=>'index'],
                      ['class'=>'nav-link pl-3', 'escape'=> false]
                    );
                  ?>
                </li>
                <li class="nav-item">
                  <!--a class="nav-link pl-3" href=""><span class="ml-1 item-text">New Events</span></a-->
                  <?=
                    $this->Html->link(
                      $this->Html->tag('span','', ['class'=>'ml-1 item-text']). "New Member",
                      ['controller'=>'Teams', 'action'=>'add'],
                      ['class'=>'nav-link pl-3', 'escape'=> false]
                    );
                  ?>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#events" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-grid fe-16"></i>
                <span class="ml-3 item-text">Events</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="events">
                <li class="nav-item">
                  <?=
                    $this->Html->link(
                      $this->Html->tag('span','', ['class'=>'ml-1 item-text']). "List Events",
                      ['controller'=>'Events', 'action'=>'allevents'],
                      ['class'=>'nav-link pl-3', 'escape'=> false]
                    );
                  ?>
                </li>
                <li class="nav-item">
                  <!--a class="nav-link pl-3" href=""><span class="ml-1 item-text">New Events</span></a-->
                  <?=
                    $this->Html->link(
                      $this->Html->tag('span','', ['class'=>'ml-1 item-text']). "New Events",
                      ['controller'=>'Events', 'action'=>'add'],
                      ['class'=>'nav-link pl-3', 'escape'=> false]
                    );
                  ?>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#about" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-alert-circle fe-16"></i>
                <span class="ml-3 item-text">About Us</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="about">
                <li class="nav-item">
                  <?=
                    $this->Html->link(
                      $this->Html->tag('span','', ['class'=>'ml-1 item-text']). "Edit About",
                      ['controller'=>'Abouts', 'action'=>'edit', 1],
                      ['class'=>'nav-link pl-3', 'escape'=> false]
                    );
                  ?>
                </li>
              </ul>
            </li>
          </ul>

          <!--p class="text-muted nav-heading mt-4 mb-1">
            <span>Extra</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link" href="">
                <i class="fe fe-book fe-16"></i>
                <span class="ml-3 item-text">Profile</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="">
                <i class="fe fe-compass fe-16"></i>
                <span class="ml-3 item-text">Settings</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="">
                <i class="fe fe-layout fe-16"></i>
                <span class="ml-3 item-text">Activities</span>
              </a>
            </li>

          </ul-->
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Exit</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <!--a class="nav-link" href="../users/logout">
                <i class="fe fe-shield fe-16"></i>
                <span class="ml-3 item-text">Logout</span>
              </a-->
              <?=
                $this->Html->link(
                  $this->Html->tag('span','', ['class'=>'fe fe-shield fe-16 ml-1 item-text']). "Logout",
                  ['controller'=>'Users', 'action'=>'logout'],
                  ['class'=>'nav-link pl-3', 'escape'=> false]
                );
              ?>
            </li>
          </ul>
        </nav>
      </aside>