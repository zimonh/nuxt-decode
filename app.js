require('dotenv').config();
const http = require('http');
const hostname = process.env.HOSTNAME;
const port = process.env.PORT;
const { VM } = require('vm2');
const vm = new VM();

const server = http.createServer((req, res) => {
  let data = '';
  req.on('data', chunk => {
     data += chunk;
  })
  req.on('end', () => {
    try{
      const ret = JSON.stringify(vm.run(data));
      res.end(ret);
    } catch (e) {
      console.error(e);
      res.end('');
    }
  });
});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});
