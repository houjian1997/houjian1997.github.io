(window["webpackJsonpreact-app"]=window["webpackJsonpreact-app"]||[]).push([[12],{233:function(e,t,a){"use strict";var n=a(51),o=a(52),c=a(54),i=a(53),s=a(55),l=a(0),r=a.n(l),u=a(27),p=a(88),h=a(89),d=a(12),m=(a(234),u.k.Item),g=function(e){return r.a.createElement("img",{src:"https://gw.alipayobjects.com/zos/rmsportal/".concat(e,".svg"),className:"am-icon am-icon-xs",alt:""})},b=function(e){function t(){var e;return Object(n.a)(this,t),(e=Object(c.a)(this,Object(i.a)(t).call(this))).gotoSearch=function(){p.a.push("/search")},e.back=function(t,a){t&&p.a.go(-1),"\u641c\u7d22"===a&&e.props.dispatch(Object(d.n)())},e.onSelect=function(t){e.setState({visible:!1,selected:t.props.value}),"scan"==t.props.value?p.a.push("/scan"):"login"==t.props.value?p.a.push("/login"):"photo"==t.props.value&&e.showActionSheet()},e.handleVisibleChange=function(t){e.setState({visible:t})},e.showActionSheet=function(){var t=["\u4ece\u624b\u673a\u76f8\u518c\u9009\u53d6","\u7acb\u5373\u62cd\u7167"];u.b.showActionSheetWithOptions({options:t,cancelButtonIndex:t.length-1,destructiveButtonIndex:t.length-2,message:"\u62cd\u7167",maskClosable:!0,"data-seed":"logId"},(function(a){e.setState({clicked:t[a]})}))},e.state={visible:!1,selected:""},e}return Object(s.a)(t,e),Object(o.a)(t,[{key:"render",value:function(){var e=this,t=this.props,a=t.title,n=t.show,o=t.search,c=t.pop;return r.a.createElement("div",null,r.a.createElement(u.i,{mode:"dark",icon:n&&r.a.createElement(u.e,{type:"left"}),rightContent:[o&&r.a.createElement(u.e,{key:"0",type:"search",style:{marginRight:"16px"},onClick:this.gotoSearch}),c&&r.a.createElement(u.k,{mask:!0,key:1,overlayClassName:"fortest",overlayStyle:{color:"currentColor"},visible:this.state.visible,overlay:[r.a.createElement(m,{key:"4",value:"scan",icon:g("tOtXhkIWzwotgGSeptou"),"data-seed":"logId"},"\u626b\u4e00\u626b"),r.a.createElement(m,{key:"5",value:"photo",icon:g("PKAgAqZWJVNwKsAJSmXd"),style:{whiteSpace:"nowrap"}},"\u62cd\u7167"),r.a.createElement(m,{key:"6",value:"login",icon:g("uQIYTFeRrjPELImDRrPt")},r.a.createElement("span",{style:{marginRight:5}},"\u767b\u5f55"))],align:{overflow:{adjustY:0,adjustX:0},offset:[-10,0]},onVisibleChange:this.handleVisibleChange,onSelect:this.onSelect},r.a.createElement("div",{style:{height:"100%",padding:"0 15px",marginRight:"-15px",display:"flex",alignItems:"center"}},r.a.createElement(u.e,{type:"ellipsis"})))],style:{backgroundColor:"#d3544d"},onLeftClick:function(){return e.back(n,a)}},a))}}]),t}(r.a.Component);t.a=Object(h.b)((function(e){return{searchList:e.getIn(["data","searchList"])}}))(b)},234:function(e,t,a){},250:function(e,t,a){},265:function(e,t,a){"use strict";a.r(t),a.d(t,"default",(function(){return p}));var n=a(51),o=a(52),c=a(54),i=a(53),s=a(55),l=a(0),r=a.n(l),u=a(233),p=(a(250),function(e){function t(){return Object(n.a)(this,t),Object(c.a)(this,Object(i.a)(t).apply(this,arguments))}return Object(s.a)(t,e),Object(o.a)(t,[{key:"render",value:function(){return r.a.createElement("div",null,r.a.createElement(u.a,{title:"\u5728\u7ebf\u9009\u5ea7",show:!0,search:!0,pop:!0}))}}]),t}(r.a.Component))}}]);
//# sourceMappingURL=12.484640dc.chunk.js.map