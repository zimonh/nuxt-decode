# nuxt-decode

Input nuxt javascript: `(function(a,b,c,d){return ......))`

Output Json string: `{data:"..."}`

## Docker
Docker image and compose YAML are included. Just start container with `docker-compose up -d`. Should you want to stop it use `docker-compose down`

## Test with PHP

An example using PHP and CURL connecting to the node API:
```
$example = file_get_contents('example.txt');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1:42069/");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $example);
curl_setopt($ch, CURLOPT_TIMEOUT_MS, 3000); // Max connection time, returns null when reached
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);

var_dump($output);
```

You can just try it out with `php curl_test.php`