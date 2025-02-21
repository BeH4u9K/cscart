<body style="background-image: url('design/themes/sacura_theme/media/Images/sakura.jpg'); background-size: cover; font-family: Arial, sans-serif; color: #d72727; padding: 0; display: flex; flex-direction: column;">
    {hook name="index:header"}
        {include file="design/themes/sacura_theme/templates/blocks/header/header.tpl"}
    {/hook}
        {hook name="index:product"}
            {include file="design/themes/sacura_theme/templates/blocks/product/product.tpl"}
        {/hook}
    {hook name="index:footer" }
        {include file="design/themes/sacura_theme/templates/blocks/footer/footer.tpl"}
    {/hook}
</body>