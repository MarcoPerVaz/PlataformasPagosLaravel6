<?php

/*  */
namespace App\Traits;

/*  */
use GuzzleHttp\Client;
/*  */

trait ConsumesExternalServices
{
  public function makeRequest($method, $requestUrl, $queryParams = [], $formParams = [], $headers = [], $isJsonRequest = false)
  {
    $client = new Client([ /* Nueva instancia del cliente de Guzzle */
      'verify' => false, /* Sólo en modo de desarrollo - quitar en modo de producción */
      'base_uri' => $this->baseUri, 
        /* Url base que usa Guzzle para calcular desde el comienzo, desde donde construir la url para enviar la petición */
    ]);

    /**
     * Cada servicio Paypal, Stripe, PayU requieren autenticarse de manera diferente
     *  $this->resolveAuthorization($queryParams, $formParams, $headers); La autorización puede ser enviada en las 
     *    cabeceras($headers), en los queryParams($queryParams), en el formParams($formParams), entonces se envían
     *    para que se modifiquen acordemente por referencia (es decir con un apuntador) y poder modificar dinámicamente
     *    estos parámetros dependiendo lo que se necesite para autorizar la petición
     * La condicional verifica si existe el método con 2 parámetros
     *  $this que es la clase que podría utilizar el método
     *  El método('resolveAuthorization')
     * 
     */
    if (method_exists($this, 'resolveAuthorization')) {
      $this->resolveAuthorization($queryParams, $formParams, $headers);
    }

    /**
     * *Los parámetros son explicados en la parte de abajo
     * Respuesta de enviar una petición desde el cliente de Guzzle
     * Recibe como parámetro el método($method), la url de la petición($requestUrl), 
     *  identificar el tipo de cuerpo($isJsonRequest si es json) y si no enviar ($formParams que es como vendría el cuerpo
     *  de la petición), luego se envian las cabeceras y por último la query($queryParams) 
     */
    $response = $client->request($method, $requestUrl, [
      $isJsonRequest ? 'json' : 'form_params' => $formParams, 'headers' => $headers, 'query' => $queryParams,
    ]);

    /**
     * $response->getBody()->getContents(); Se obtiene la respuesta($response->) con el cuerpo(getBody())
     *   de la petición y que de ese cuerpo solo se obtiene el contenido(getContents())
     */
    $response = $response->getBody()->getContents();

    /**
     * La condicional verifica si existe el método con 2 parámetros
     *  $this que es la clase que podría utilizar 
     *  El método y el método('decodeResponse')
     */
    if (method_exists($this, 'decodeResponse')) {
      $response = $this->decodeResponse($response); /* Decodificar la respuesta */
    }

    /**
     * Si el componente no nos específica la manera de resolver la autorización(resolveAuthorization) o de
     *  decodificación(decodeResponse) entonces podríamos devolver la petición($response) sin ningún tipo de cambio
     */
    return $response; /* Devolver la respuesta */
  }
}
/*  */

/* Notes:
    *Los parámetros de la función makeRequest() $queryParams = [], $formParams = [], $headers = [], $isJsonRequest = false son
     opcionales dependiendo la plataforma de pago
    *Trait es una capacidad que se le da a una clase cualquiera (usualmente a un controlador, pero también puede ser a modelos),
     de realizar una petición en el caso particular de que sea un trait que realice peticiones
    *El trait ConsumesExternalServices tendrá solo una responsabilidad y será enviar una petición
    *Definición de paramámetros de la funcón makeRequest()
      *$method devolverá get, post, put, patch, delete
      *$requestUri es la url a la cuál se hará la petición
      *Parámetros opcionales ya que dependerá de cada plataforma cuales usa y cuales no
        *$queryParams elementos que van después del signo de interrogación en la consulta o en la url (parámetros enviados
          en la url)
        *$formParams son los elementos que van en el cuerpo de la petición
        *$headers son las cabeceras que se envían en la petición
        *$isJsonRequest elemento que indicaría que si la petición tiene un cuerpo en format json o no
*/
