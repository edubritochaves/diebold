'use strict';

exports.processJSONPOST = function(args, res, next) {
  /**
   * parameters expected in the args:
  * start_latitude (Double)
  * start_longitude (Double)
  * end_latitude (Double)
  * end_longitude (Double)
  **/
    var examples = {};
  examples['application/json'] = [ {
  "high_estimate" : 1.3579000000000001069366817318950779736042022705078125,
  "product_id" : "aeiou",
  "low_estimate" : 1.3579000000000001069366817318950779736042022705078125,
  "surge_multiplier" : 1.3579000000000001069366817318950779736042022705078125,
  "estimate" : "aeiou",
  "display_name" : "aeiou",
  "currency_code" : "aeiou"
} ];
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}



