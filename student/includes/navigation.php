
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Administrator</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link <?=($page == "home")?'active': '';?>" href="index.php?page=home">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link <?=($page == "pages")?'active': '';?>" href="#">
                  <span data-feather="file"></span>
                  Pages
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?=($page == "teachers")?'active': '';?>" href="#">
                  <span data-feather="shopping-cart"></span>
                  Teachers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?=($page == "students")?'active': '';?>" href="#">
                  <span data-feather="users"></span>
                  Students
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?=($page == "classes")?'active': '';?>" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Classes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?=($page == "subjects")?'active': '';?>" href="#">
                  <span data-feather="layers"></span>
                  Subjects
                </a>
              </li>
            </ul>




          </div>
        </nav>
        
         <main role="main" class="col-md-10 ml-sm-auto col-lg-10 pt-3 px-4">

         
     
        
   <?php  include 'pages/'.$page.'.php'; ?>
 
       
   <?php include '../admin/includes/debug.php';?>
    
        </main>


      </div>
    </div>