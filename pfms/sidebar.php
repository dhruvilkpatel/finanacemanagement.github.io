<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
			<?php
			if(isset($_SESSION['login']))
{
?>
	<li>
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
<li>
                    <a class="active" href="income.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Income</span>
                    </a>
                </li>
				<li>
                    <a class="active" href="add_category.php">
                        <i class="fa fa-th"></i>
                        <span>Add Category</span>
                    </a>
                </li>
				<li>
                    <a class="active" href="view_category.php">
                        <i class="fa fa-book"></i>
                        <span>View Category</span>
                    </a>
                </li>
				<li>
                    <a class="active" href="add_expense.php">
                        <i class="fa fa-th"></i>
                        <span>Add Expense</span>
                    </a>
                </li><li>
                    <a class="active" href="view_expence.php">
                        <i class="fa fa-book"></i>
                        <span>View Expence</span>
                    </a>
                </li>
				<li>
                    <a class="active" href="mail_compose.php">
                        <i class="fa fa-book"></i>
                        <span>Use Calculater</span>
                    </a>
                </li>
				<li>
                    <a class="active" href="currency.php">
                        <i class="fa fa-book"></i>
                        <span>Use Currency Converter</span>
                    </a>
                </li>
				<li>
                    <a class="active" href="chartjs.php">
                        <i class="fa fa-book"></i>
                        <span>View Graph</span>
                    </a>
                </li><li>
                    <a class="active" href="logout.php">
                        <i class="fa fa-book"></i>
                        <span>Logout</span>
                    </a>
                </li>

	
<?php
}
else
{
?>

<li>
                    <a href="registration.php">
                        <i class="fa fa-user"></i>
                        <span>Signup</span>
                    </a>
                </li>
<li>
                    <a href="login.php">
                        <i class="fa fa-user"></i>
                        <span>Login </span>
                    </a>
                </li>



<?php	
}
?>
                
				
                
               
                
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>