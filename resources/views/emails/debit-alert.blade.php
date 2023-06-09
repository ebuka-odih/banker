@component('mail::message')

<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>


# Hello {{ $last_name }} {{ $first_name }}



<strong>Transaction Summary</strong>

<table >
    <tr>
        <th>Debit Amount:</th>
        <td>$@convert($amount)</td>
    </tr>
    <tr>
        <th>A/C Number:</th>
        <td>{{ substr($account_number, 0, 5) }}xxxx</td>
    </tr>
    <tr>
        <th>Account Name:</th>
        <td>{{ $last_name }} {{ $first_name }}</td>
    </tr>
    <tr>
        <th>Reference Number:</th>
        <td>{{ $transaction_id }}</td>
    </tr>
    <tr>
        <th colspan="2"></th>
    </tr>
    <tr>
        <th>Receiver A/C Number:</th>
        <td>{{ substr($acct_number, 0, 5) }}xxxx</td>
    </tr>
    <tr>
        <th>Recipient Name:</th>
        <td>{{ $acct_name }}</td>
    </tr>
    <tr>
        <th>Bank Name:</th>
        <td>{{ $bank_name }}</td>
    </tr>
</table>




    Thanks, {{ config('app.name') }}
@endcomponent
