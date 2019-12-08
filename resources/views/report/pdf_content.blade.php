<div class="container">
    <h1>Registration list</h1>
    <table border="1" cellpadding="10" width="100%" style="margin-bottom: 100px;">
        <tr>
            <th width="25%">Student Name</th>
            <th width="25%">Course Name</th>
            <th width="25%">Registered At</th>
            <th width="25%">Course Fee</th>
        </tr>
        <?php 
        $total = 0;
        ?>

       @Foreach($registratons as $registraton)
            <tr>
                <td>{{ $registraton->user_name }}</td>
                <td>{{ $registraton->course_name }}</td>
                <td>{{ $registraton->created_at }}</td>
                <td align="right">{{ $registraton->fee }}</td>

                <?php $total = $total + $registraton->fee; ?>
            </tr>
        @endForeach

        <tr>
            <td width="75%" colspan="3" align="right">Total</td>
            <td width="25%" align="right">{{ $total }}</td>
        </tr>
    </table>
</div>