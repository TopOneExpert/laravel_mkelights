(function (red5prosdk) {

  // Create a new instance of the Flash/RTMP subcriber.
  var subscriber = new red5prosdk.RTMPSubscriber();

  // Initialize
  subscriber.init({
    protocol: 'rtmp',
    port: 1935,
    host: '199.167.151.38',
    app: 'live',
    streamName: 'stream',
    swf: 'lib/red5pro-subscriber.swf'
    productInstallURL: 'lib/swfobject/playerProductInstall.swf',
    minFlashVersion: '10.0.0',
    buffer: 1,
    width: 640,
    height: 480,
    embedWidth: '100%',
    embedHeight: '100%'
  })
  .then(function(subscriber) {
    // `subcriber` is the Flash/RTMP Subscriber instance.
    return subscriber.subscribe();
  })
  .then(function(subscriber) {
    // subscription is complete.
    // playback should begin immediately due to
    //   declaration of `autoplay` on the `video` element.
  })
  .catch(function(error) {
    // A fault occurred while trying to initialize and playback the stream.
    console.error(error)
  });

})(window.red5prosdk);
