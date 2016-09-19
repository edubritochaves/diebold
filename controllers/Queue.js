'use strict';

var url = require('url');


var Queue = require('./QueueService');


module.exports.processJSONPOST = function processJSONPOST (req, res, next) {
  Queue.processJSONPOST(req.swagger.params, res, next);
};
