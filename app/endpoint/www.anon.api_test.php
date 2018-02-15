<style>

</style>
<div id="swef-api-test">

  <p>Post to GET ./api from this host:</p>
  <form class="test" method="post" action="./api" target="_blank">
    <div class="input">
      <textarea name="JSON">
{

    "email"         : "test.1@no.where",

    "password"      : "test",

    "procedures"    : [
        [ "apiOptionsDashboard" ],
        [ "apiOptions" ],
        [ "swefUUID" ],
        [ "apiShortcuts", "%!$" ],
        [ "apiShortcuts", "%o%t%" ],
        [ "apiTestNotAllowed" ],
        [ "apiTestNotExisting" ],
        [ "SwefCMS::itemSelect", "0a719714-c79a-11e7-9428-d8d3859a9e13" ]
    ]

}
      </textarea>
    </div>
    <div class="input">
      <label for="">&nbsp;</label>
      <input type="submit" value="<t en>Post</t> JSON" />
    </div>
  </form>
  <small>JSON validator: <a target="_blank" href="https://jsonlint.com/">https://jsonlint.com/</a></small>

  <p>Post to GET / from http://api.swefseed.local</p>
  <form class="test" method="post" action="http://api.swefseed.local/" target="_blank">
    <div class="input">
      <textarea name="JSON">
{

    "email"         : "test.1@no.where",

    "password"      : "test",

    "procedures"    : [
        [ "apiOptionsDashboard" ],
        [ "apiOptions" ],
        [ "swefUUID" ],
        [ "apiShortcuts", "%!$" ],
        [ "apiShortcuts", "%o%t%" ],
        [ "apiTestNotAllowed" ],
        [ "apiTestNotExisting" ]
    ]

}
      </textarea>
    </div>
    <div class="input">
      <label for="">&nbsp;</label>
      <input type="submit" value="<t en>Post</t> JSON" />
    </div>
  </form>
  <small>JSON validator: <a target="_blank" href="https://jsonlint.com/">https://jsonlint.com/</a></small>

</div>

