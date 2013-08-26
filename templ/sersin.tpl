{{#post}}
	post onay bilgileri burada
{{/post}}

{{^post}}

form: <form id="form1" name="form1" method="post" action="">
  kutucuK 
  <input type="text" name="textfield" id="textfield" value="{{giden.textfield}}"/>
  {{#hata.textfield}}
  	Boş Bırakılamaz
  {{/hata.textfield}}
  
  <br>
kutucuK 
  <input type="text" name="iki" id="iki"  for="inputError" />
  {{#hata.iki}}
  	Boş Bırakılamaz
  {{/hata.iki}}
            <div class="control-group error">
            <label class="control-label" for="inputError">Input with error</label>
            <div class="controls">
              <input type="text" id="inputError">
              <span class="help-inline">Please correct the error</span>
            </div>
          </div>
  <br>
  <input type="submit" name="button" id="button" value="Gönder" />
</form>

{{isim}}
<br><br><br><br>
{{>araba}}

<br><br><br><br>

{{>koyler}}

{{/post}}