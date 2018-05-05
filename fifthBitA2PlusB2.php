function fifthBitA2PlusB2($a, $b) {

    $ans = substr(decbin(pow($a,2) + pow($b,2)),-6,1);
    return (int)$ans;
}
