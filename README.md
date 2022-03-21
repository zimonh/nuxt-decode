# nuxt-decode

Input nuxt javascript: `(function(a,b,c,d){return ......))`

Output Json string: `{data:"..."}`

An example using PHP and CURL connecting to the node API:
```
$exmple = file_get_contents('/MyProjects/nuxt-decode/example.txt');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1:3000/");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $exmple);
curl_setopt($ch, CURLOPT_TIMEOUT_MS, 3000); // Max connection time, returns null when reached
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
```
