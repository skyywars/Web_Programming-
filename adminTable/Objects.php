<?php include 'Header.php'; ?>
<?php include 'Menu.php'; ?>
   
<div id="content">
    <h2>Objects</h2>
    <?php
    // Include Employee.php using include_once to avoid redeclaration
    include 'Supervisor.php';

    // Create employee objects
    $employee1 = new Employee(1, "Chris", "Rogers");
    $employee2 = new Employee(2, "Matt", "Prior");
    $employee3 = new Employee(3, "Cindy", "Burnskill");
    $employee4 = new Employee(4, "Elizabeth", "Ford");
    $employee5 = new Employee(5, "Doug", "May");
    $employee6 = new Employee(6, "John", "Hopkins");

    // Organize employees into arrays
    $employees1 = array($employee1, $employee2, $employee3);
    $employees2 = array($employee4, $employee5, $employee6);
    
    // Create supervisor objects
    $supervisor1 = new Supervisor(101, "Adam", "Philip", $employees1);
    $supervisor2 = new Supervisor(102, "Nicolas", "Jones", $employees2);

    // Display employee details and their supervisors
    foreach ($supervisor1->getEmployees() as $employee) {
        echo "Employee ID: " . $employee->getEmployeeId() . ", ";
        echo "Name: " . $employee->getFirstName() . " " . $employee->getLastName() . ", ";
        echo "Supervisor: " . $supervisor1->getFirstName() . " " . $supervisor1->getLastName() . "<br>";
    }

    foreach ($supervisor2->getEmployees() as $employee) {
        echo "Employee ID: " . $employee->getEmployeeId() . ", ";
        echo "Name: " . $employee->getFirstName() . " " . $employee->getLastName() . ", ";
        echo "Supervisor: " . $supervisor2->getFirstName() . " " . $supervisor2->getLastName() . "<br>";
    }
    ?>
</div>
<?php include 'Footer.php'; ?>
