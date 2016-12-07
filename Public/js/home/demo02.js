// // 不使用JSX
// ReactDOM.render(
//     React.createElement('div', null,
//         React.createElement('div', null,
//             React.createElement('div', null, 'content')
//         )
//     ),
//     document.getElementById('example')
// );

// JSX语法
// var names=['Alice', 'Emily', 'Kate'];
// ReactDOM.render(
// 	<div>
// 	{
// 		names.map(function(name){
// 			return <div>Hello, {name}!</div>
// 		})
// 	}
// 	</div>,
// 	document.getElementById('example')
// );

// 组件
var HelloMessage = React.createClass({
	render: function() {
		return <h1>Hello {this.props.name}<\/h1>;
	}
})

ReactDOM.render(
	<HelloMessage name="John" />,
	document.getElementById('example')
);

var CommentList = React.createClass({
  render: function() {
    return (
      <div className="commentList">
        Hello, world! I am a CommentList.
      <\/div>
    );
  }
});

var CommentForm = React.createClass({
  render: function() {
    return (
      <div className="commentForm">
        Hello, world! I am a CommentForm.
      <\/div>
    );
  }
});

var CommentBox = React.createClass({
	render: function() {
		return (
			<div className="CommentBox">
				<h1>Comments</h1>
				<CommentList />
				<CommentForm />
			<\/div>
		);
	}
});


ReactDOM.render(
	<CommentBox />,
	document.getElementById('example')
);