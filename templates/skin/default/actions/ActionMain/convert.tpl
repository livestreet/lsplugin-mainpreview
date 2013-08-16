{include file='header.tpl'}

<form action="" method="POST">
    <input type="hidden" name="security_ls_key" value="{$LIVESTREET_SECURITY_KEY}" />
    {$aLang.plugin.mainpreview.submit_convert_notice}
    <input type="submit" name="submit_convert" value="{$aLang.plugin.mainpreview.submit_convert}">
</form>

<script type="text/javascript">
    var pages = $
    function ajaxRecurs(url,page_num){
        ls.ajax(url+'/'+page_num,{},function(response){
            if(response.bStateError){
                ls.msg.error(response.sMsg);
            } else {
                ls.msg.notice(response.sMsg);
                page_num++;
                ajaxRecurs(url,page_num);
            }
        });
    }

    function ajaxConvert(){
        ajaxRecurs(aRouter['mainpreview']+'ajaxconvert',1);
    }

</script>

<a href="#" onclick="ajaxConvert(); return false">Ajax convert</a>

{include file='footer.tpl'}