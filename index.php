<?php
echo <<<END
<h1>Database Design</h1>
<br>
<p>
    <em>Employee:</em> employeeId(PK), firstName, lastName, address, zip(FK -> Location)
    <br>
    <em>Invoice:</em> invoiceId(PK), employeeId(FK -> Employee), customerId(FK -> Customer), invoiceAmount, terms
    <br>
    <em>Customer:</em> customerId(PK), name, address, zip(FK -> Location)
    <br>
    <em>Location:</em> zip(PK), city, state
</p>



END;

?>