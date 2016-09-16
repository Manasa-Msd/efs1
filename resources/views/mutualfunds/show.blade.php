@extends('app')
@section('content')
    <h1>Mutual Fund</h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Mutual Fund Name</td>
                <td><?php echo ($mutualfund['name']); ?></td>
            </tr>
            <tr>
                <td>Purchase Date</td>
                <td><?php echo ($mutualfund['start_date']); ?></td>
            </tr>
            <tr>
                <td>Purchase Price</td>
                <td><?php echo ($mutualfund['buy_price']); ?></td>
            </tr>
            <tr>
                <td>Current Price</td>
                <td><?php echo ($mutualfund['current_price']); ?></td>
            </tr>
			<tr>
                <td>Number of Shares</td>
                <td><?php echo ($mutualfund['shares']); ?></td>
            </tr>
            <tr>
            </tbody>
        </table>
    </div>
@stop
