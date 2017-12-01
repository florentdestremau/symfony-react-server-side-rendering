import React from 'react';

export default ({posts}) => (<section>
  <h1>Hello Blog</h1>
  {posts ? posts.map(post => (<article key={post.id}>
    <h2>{post.title}</h2>
    <p>{post.body}</p>
    <hr/>
  </article>)) : null}
</section>);
