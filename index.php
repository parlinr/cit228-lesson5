<?php
echo <<<END
<h1>Database Design</h1>
<br>
<p>
    <em>Employee:</em> employeeId(PK), firstName, lastName, address, city, state, zip
    <br>
    <em>Invoice:</em> invoiceId(PK), employeeId(FK -> Employee), customerId(FK -> Customer),
    <br>
    <em>Customer:</em> customerId(PK), name, address, city, state, zip
</p>



END;

?>