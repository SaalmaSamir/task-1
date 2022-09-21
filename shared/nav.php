<nav class="navbar navbar-expand-lg navbar-dark  bg-dark bg-gradient">
        <a class="navbar-brand text-info fs-1" href="/task-1/">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-info fs-2" href="/task-1/index.php">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-info fs-2 " href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Employees
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item text-dark fs-3" href="/task-1/employees/list.php">List All</a>
                        <a class="dropdown-item text-dark fs-3" href="/task-1/employees/create.php">Create New</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-info fs-2" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        departments
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item text-dark fs-3" href="/task-1/departments/list.php">List All</a>
                        <a class="dropdown-item text-dark fs-3" href="/task-1/departments/create.php">Create New</a>
                    </div>
                </li>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>