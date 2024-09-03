
<script>
function queueTemplateVariables(sourceJson, targetJson) {
  const templateKeys = ['event_type', 'start_date', 'start_time', 'end_date', 'end_time'];
  const queue = {};

  for (const key of templateKeys) {
    if (key in sourceJson) {
      queue[key] = sourceJson[key];
    }
  }

  return { ...targetJson, templateVariables: queue };
}

// Example usage:
const carousel15 = {
  "event_type": "Consult",
  "start_date": "1981-06-21",
  "start_time": "07:08",
  "end_date": "2222-05-06",
  "end_time": "18:18"
};

const targetJson = { existingKey: "existingValue" };

const result = queueTemplateVariables(carousel15, targetJson);
console.log(JSON.stringify(result, null, 2));
</script>