<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo">
      <a href="/" class="simple-text logo-normal">
        Integration
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="{{ $nav_dashboard ?? '' }}">
          <a class="nav-link" href="/dashboard">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="{{ $nav_users ?? ''  }}">
          <a class="nav-link" href="./users">
            <i class="material-icons">person</i>
            <p>Users</p>
          </a>
        </li>
        <li class="{{ $nav_tableList ?? ''  }}">
          <a class="nav-link" href="./tables">
            <i class="material-icons">content_paste</i>
            <p>Table List</p>
          </a>
        </li>
        <li class="{{ $nav_fileUpload ?? ''  }}">
          <a class="nav-link" href="./fileUpload">
            <i class="material-icons">library_books</i>
            <p>File Upload</p>
          </a>
        </li>
        <li class="{{$nav_addData ?? '' }}">
          <a class="nav-link" href="/addData">
            <i class="material-icons">bubble_chart</i>
            <p>Add Data</p>
          </a>
        </li>
        <!--
        <li class="nav-item ">
          <a class="nav-link" href="./map.html">
            <i class="material-icons">location_ons</i>
            <p>Maps</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="./notifications.html">
            <i class="material-icons">notifications</i>
            <p>Notifications</p>
          </a>
        </li>
         <li class="nav-item active-pro ">
              <a class="nav-link" href="./upgrade.html">
                  <i class="material-icons">unarchive</i>
                  <p>Upgrade to PRO</p>
              </a>
          </li> -->
      </ul>
    </div>
  </div>