$(document).ready(function(){function getTotalShareCount(url,callback){var count=0,fb_count=0,linkedin_count=0,facebookDataUrl=(location.protocol,location.protocol+"//graph.facebook.com/"+url);$.getJSON(facebookDataUrl,function(facebookData){null!==facebookData&&facebookData!==undefined&&null!==facebookData.share&&facebookData.share!==undefined&&null!==facebookData.share.share_count&&facebookData.share.share_count!==undefined&&(fb_count=facebookData.share.share_count),linkedincallback=function(liData){null!==liData&&liData!==undefined&&null!==liData.count&&liData.count!==undefined&&(linkedin_count=liData.count,count=fb_count+0+linkedin_count,callback(null,count))};var linkedInDataUrl=location.protocol+"//www.linkedin.com/countserv/count/share?url="+url+"&format=jsonp&callback=linkedincallback";$.getScript(linkedInDataUrl)})}for(var url="",links=document.getElementsByTagName("link"),i=0;i<links.length;i++)"canonical"===links[i].getAttribute("rel")&&(url=links[i].getAttribute("href"));getTotalShareCount(url,function(urlErr,urlCount){urlErr&&(urlCount=0),urlCount>0?($(".share_count_span").html(urlCount),$(".s-count").show()):$(".share-holder").css("width","100%")})});