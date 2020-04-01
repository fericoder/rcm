<table>
    <thead>
    <tr>
        <th style="color: red; background-color: red">ردیف</th>
        <th style="color: red">کد واحد</th>
        <th style="color: red">نام و نام خانوادگی</th>
        <th style="color: green">مبلغ</th>
        <th style="color: green">بابت</th>
        <th style="color: green">کد صورتحساب</th>
    </tr>
    </thead>
    <tbody>
    @foreach($rows as $row)
        <tr>
            <td style="color: red">{{ $loop->iteration }}</td>
            <td style="color: red">{{ $row->code }}</td>
            <td style="color: red">{{ $row->fullName }}</td>
            <td style="color: green"></td>
            <td style="color: green"></td>
            <td style="color: green"></td>
        </tr>
    @endforeach
    </tbody>
</table>
