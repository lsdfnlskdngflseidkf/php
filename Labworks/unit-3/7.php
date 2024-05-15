<?php
interface PaymentGateway
{
    public function makePayment(float $amount, array $paymentDetails): string;
}
class eSewaPG implements PaymentGateway
{
    public function makePayment(float $amount, array $paymentDetails): string
    {
        // Simulate making a payment with eSewa
        $paymentId = uniqid(); // Generate a unique payment ID
        return $paymentId;
    }
}
class KhaltiPG implements PaymentGateway
{
    public function makePayment(float $amount, array $paymentDetails): string
    {
        //simulate the payment with khaltiapi
        $paymentId = uniqid(); // Generate a unique payment ID
        return $paymentId;
    }
}
$eSewaPG = new eSewaPG();
$paymentDetails = [
    'cardNumber' => '1234567890123456',
    'expiryDate' => '12/25',
    'cvv' => '123'
];
$paymentId = $eSewaPG->makePayment(100.0, $paymentDetails);
echo "eSewa Payment ID: $paymentId<br>";
$khaltiPG = new KhaltiPG();
$paymentId = $khaltiPG->makePayment(200.0, $paymentDetails);
echo "Khalti Payment ID: $paymentId<br>";
?>