'use strict';

exports.processJSONPOST = function(args, res, next) {
  /**
   * parameters expected in the args:
  * _in (In)
  **/
    var examples = {};
  examples['application/json'] = {
  "data" : {
    "MESSAGE" : [ {
      "MESSAGE_CODE" : "aeiou",
      "MESSAGE_TEXT" : "aeiou"
    } ],
    "RESPONSE_CODE" : 1.3579000000000001069366817318950779736042022705078125,
    "OUTPUT_DATA" : {
      "queues" : [ {
        "prior" : 1.3579000000000001069366817318950779736042022705078125,
        "cat" : 1.3579000000000001069366817318950779736042022705078125,
        "n" : "aeiou"
      } ],
      "queue" : ""
    },
    "EXCEPTION" : [ "" ]
  }
};
  if(Object.keys(examples).length > 0) {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(examples[Object.keys(examples)[0]] || {}, null, 2));
  }
  else {
    res.end();
  }
  
}

